// Generated by CoffeeScript 1.7.1
  var Document, Input, Section, SplitContent, Table,
    __hasProp = {}.hasOwnProperty,
    __extends = function(child, parent) { for (var key in parent) { if (__hasProp.call(parent, key)) child[key] = parent[key]; } function ctor() { this.constructor = child; } ctor.prototype = parent.prototype; child.prototype = new ctor(); child.__super__ = parent.prototype; return child; };

  Document = (function() {
    Document.CURRENTY = null;

    Document.SETTINGS = null;

    function Document(name, settings) {
      if (name == null) {
        name = "";
      }
      if (settings == null) {
        settings = null;
      }
      this.name = name;
      this.children = [];
      if (settings != null) {
        Document.CURRENTY = settings.initY;
        Document.SETTINGS = settings;
      }
    }

    Document.is_enough_space = function() {
      return !(Document.CURRENTY + Document.SETTINGS.jumpTitle > Document.SETTINGS.bottom);
    };

    Document.check_space = function() {
      if (!Document.is_enough_space()) {
        Document.SETTINGS.jspdf.addPage();
        return Document.CURRENTY = Document.SETTINGS.top;
      }
    };

    Document.prototype.add = function(child) {
      return this.children.push(child);
    };

    Document.prototype.render = function(currentLevel) {
      var child, _i, _len, _ref, _results;
      _ref = this.children;
      _results = [];
      for (_i = 0, _len = _ref.length; _i < _len; _i++) {
        child = _ref[_i];
        _results.push(child.render(currentLevel));
      }
      return _results;
    };

    return Document;

  })();

  Section = (function(_super) {
    __extends(Section, _super);

    function Section(name) {
      Section.__super__.constructor.call(this, name);
    }

    Section.prototype.render = function(currentLevel) {
      Document.CURRENTY += Document.SETTINGS.jumpSection - currentLevel * 5;
      Document.SETTINGS.jspdf.setFontSize(12 - currentLevel * 0.4);
      Document.SETTINGS.jspdf.setFontStyle('bold');
      if (this.name) {
        Document.check_space();
        Document.SETTINGS.jspdf.text(Document.SETTINGS.marginLeft + currentLevel * Document.SETTINGS.offsetXNextLevel, Document.CURRENTY, this.name);
        Document.CURRENTY += Document.SETTINGS.jumpTitle - currentLevel;
      }
      return Section.__super__.render.call(this, currentLevel + 1);
    };

    return Section;

  })(Document);

  Input = (function(_super) {
    __extends(Input, _super);

    function Input(label, value) {
      this.label = label;
      this.value = value;
    }

    Input.prototype.render = function(currentLevel) {
      var contentWidth, line, nbChar, splittedValue, xOffsetStart, _i, _j, _len, _len1, _results;
      Document.SETTINGS.jspdf.setFontStyle('bold');
      Document.SETTINGS.jspdf.setFontSize(9);
      xOffsetStart = Document.SETTINGS.marginLeft + currentLevel * Document.SETTINGS.offsetXNextLevel;
      contentWidth = Document.SETTINGS.marginRight - xOffsetStart;
      nbChar = SplitContent.nbCharFromOffset(contentWidth);
      splittedValue = SplitContent.split(this.label, nbChar);
      for (_i = 0, _len = splittedValue.length; _i < _len; _i++) {
        line = splittedValue[_i];
        Document.check_space();
        Document.SETTINGS.jspdf.text(Document.SETTINGS.marginLeft + currentLevel * Document.SETTINGS.offsetXNextLevel, Document.CURRENTY, line);
        Document.CURRENTY += Document.SETTINGS.jumpParagraph;
      }
      Document.CURRENTY -= Document.SETTINGS.jumpParagraph;
      Document.CURRENTY += Document.SETTINGS.jumpParagraph;
      Document.SETTINGS.jspdf.setFontStyle('normal');
      xOffsetStart = Document.SETTINGS.marginLeft + (currentLevel + 1) * Document.SETTINGS.offsetXNextLevel;
      contentWidth = Document.SETTINGS.marginRight - xOffsetStart;
      nbChar = SplitContent.nbCharFromOffset(contentWidth);
      splittedValue = SplitContent.split(this.value.replace(/\n/g, " "), nbChar);
      _results = [];
      for (_j = 0, _len1 = splittedValue.length; _j < _len1; _j++) {
        line = splittedValue[_j];
        Document.check_space();
        Document.SETTINGS.jspdf.text(xOffsetStart, Document.CURRENTY, line);
        _results.push(Document.CURRENTY += Document.SETTINGS.jumpParagraph);
      }
      return _results;
    };

    return Input;

  })(Document);

  Table = (function(_super) {
    __extends(Table, _super);

    function Table(label, values) {
      this.label = label;
      this.values = values;
    }

    Table.prototype.render = function(currentLevel) {
      var contentWidth, input, line, nbChar, rows, splittedValue, xOffsetStart, xOffsetStartData, xOffsetStartTitle, _i, _j, _k, _l, _len, _len1, _len2, _len3, _ref;
      Document.SETTINGS.jspdf.setFontStyle('bold');
      Document.SETTINGS.jspdf.setFontSize(9);
      xOffsetStart = Document.SETTINGS.marginLeft + currentLevel * Document.SETTINGS.offsetXNextLevel;
      contentWidth = Document.SETTINGS.marginRight - xOffsetStart;
      nbChar = SplitContent.nbCharFromOffset(contentWidth);
      splittedValue = SplitContent.split(this.label, nbChar);
      for (_i = 0, _len = splittedValue.length; _i < _len; _i++) {
        line = splittedValue[_i];
        Document.check_space();
        Document.SETTINGS.jspdf.text(Document.SETTINGS.marginLeft + currentLevel * Document.SETTINGS.offsetXNextLevel, Document.CURRENTY, line);
        Document.CURRENTY += Document.SETTINGS.jumpParagraph;
      }
      Document.CURRENTY -= Document.SETTINGS.jumpParagraph;
      Document.CURRENTY += Document.SETTINGS.jumpParagraph;
      xOffsetStartTitle = Document.SETTINGS.marginLeft + (currentLevel + 1) * Document.SETTINGS.offsetXNextLevel;
      xOffsetStartData = Document.SETTINGS.marginLeft + (currentLevel + 2) * Document.SETTINGS.offsetXNextLevel;
      _ref = this.values;
      for (_j = 0, _len1 = _ref.length; _j < _len1; _j++) {
        rows = _ref[_j];
        for (_k = 0, _len2 = rows.length; _k < _len2; _k++) {
          input = rows[_k];
          Document.check_space();
          Document.SETTINGS.jspdf.setFontStyle('bold');
          Document.SETTINGS.jspdf.text(xOffsetStartTitle, Document.CURRENTY, input.title);
          Document.CURRENTY += Document.SETTINGS.jumpParagraph;
          Document.SETTINGS.jspdf.setFontStyle('normal');
          nbChar = SplitContent.nbCharFromOffset(Document.SETTINGS.marginRight - xOffsetStartTitle);
          splittedValue = SplitContent.split(input.data.replace(/\n/g, " "), nbChar);
          for (_l = 0, _len3 = splittedValue.length; _l < _len3; _l++) {
            line = splittedValue[_l];
            Document.check_space();
            Document.SETTINGS.jspdf.text(xOffsetStartData, Document.CURRENTY, line);
            Document.CURRENTY += Document.SETTINGS.jumpParagraph;
          }
        }
        Document.CURRENTY += Document.SETTINGS.jumpParagraph;
      }
      return Document.CURRENTY -= Document.SETTINGS.jumpParagraph;
    };

    return Table;

  })(Document);

  SplitContent = (function() {
    function SplitContent() {}

    SplitContent.nbCharFromOffset = function(offset) {
      return parseInt(offset * (84 / 165));
    };

    SplitContent.split = function(content, line_length) {
      var currentLine, lines, newLine, total, word, words, _i, _len;
      if (content) {
        words = content.split(" ");
        lines = [];
        currentLine = [];
        total = 0;
        for (_i = 0, _len = words.length; _i < _len; _i++) {
          word = words[_i];
          if (total + word.length <= line_length) {
            currentLine.push(word);
            total += word.length;
          } else {
            lines.push(currentLine.join(" "));
            newLine = [];
            newLine.push(word);
            currentLine = newLine;
            total = word.length;
          }
        }
        lines.push(currentLine.join(" "));
        return lines;
      } else {
        return [];
      }
    };

    return SplitContent;

  })();
